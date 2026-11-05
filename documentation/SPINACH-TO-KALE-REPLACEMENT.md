# Replace Spinach with Kale

This guide explains how to replace all spinach ingredient references with kale in your recipe database.

## Summary

**Total affected:** 6 recipe ingredients
**Replacements:**
- fresh baby spinach → baby kale (1 recipe)
- packed spinach leaves → baby kale (1 recipe)
- baby spinach → baby kale (2 recipes)
- packed cups baby spinach → baby kale (1 recipe)
- cooked spinach → kale (1 recipe)

**Not replaced:** 3 ingredients that already contain both spinach and kale:
- baby spinach or baby kale
- packed cups baby spinach or kale
- packed cup spinach kale or other leafy green

## Option 1: Using Artisan Command (Recommended)

### Preview Changes
```bash
php artisan ingredient:spinach-to-kale --dry-run
```

### Apply Changes
```bash
php artisan ingredient:spinach-to-kale
```

This method:
- ✅ Automatically handles transaction (rollback on error)
- ✅ Shows clear progress and summary
- ✅ Safer and easier to use
- ✅ Can preview with `--dry-run`

## Option 2: Using SQL Script

### File Location
`documentation/replace_spinach_with_kale.sql`

### Execute via psql (PostgreSQL)
```bash
psql -U your_username -d your_database -f documentation/replace_spinach_with_kale.sql
```

### Execute via mysql (MySQL)
```bash
mysql -u your_username -p your_database < documentation/replace_spinach_with_kale.sql
```

### Execute via Tinker
```bash
php artisan tinker --execute="DB::unprepared(file_get_contents('documentation/replace_spinach_with_kale.sql'));"
```

**Important:** The SQL script is wrapped in a transaction. Review the verification query output before committing.

To commit:
1. Comment out `-- COMMIT;` → `COMMIT;`
2. Re-run the script

Or run it without the transaction wrapper for auto-commit.

## Verification

After running either method, verify the changes:

```bash
php artisan tinker --execute="
echo 'Recipe ingredients using kale:' . PHP_EOL;
\$kaleIds = [315, 606]; // baby kale, kale
\$count = App\Models\RecipeIngredient::whereIn('ingredient_id', \$kaleIds)->count();
echo 'Total: ' . \$count . PHP_EOL . PHP_EOL;

echo 'Recipe ingredients still using spinach:' . PHP_EOL;
\$spinachIds = [199, 427, 441, 921, 1017];
\$spinachCount = App\Models\RecipeIngredient::whereIn('ingredient_id', \$spinachIds)->count();
echo 'Total: ' . \$spinachCount . ' (should be 0)' . PHP_EOL;
"
```

Expected output:
```
Recipe ingredients using kale:
Total: [previous count + 6]

Recipe ingredients still using spinach:
Total: 0 (should be 0)
```

## Detailed Mapping

| Old Ingredient ID | Old Name | New Ingredient ID | New Name | Affected |
|-------------------|----------|-------------------|----------|----------|
| 199 | fresh baby spinach | 315 | baby kale | 1 |
| 427 | packed spinach leaves | 315 | baby kale | 1 |
| 921 | baby spinach | 315 | baby kale | 2 |
| 1017 | packed cups baby spinach | 315 | baby kale | 1 |
| 441 | cooked spinach | 606 | kale | 1 |

## Rollback

If you need to undo the changes:

### Using Artisan (create reverse command)
```bash
# Create a custom command or use tinker:
php artisan tinker --execute="
// Reverse the mappings
App\Models\RecipeIngredient::where('ingredient_id', 315)
    ->whereIn('id', [/* specific IDs from backup */])
    ->update(['ingredient_id' => 199]); // etc.
"
```

### Using SQL
```sql
BEGIN;

-- Reverse mappings (adjust based on your backup)
UPDATE recipe_ingredients SET ingredient_id = 199 WHERE ingredient_id = 315 AND [...];
UPDATE recipe_ingredients SET ingredient_id = 427 WHERE ingredient_id = 315 AND [...];
-- etc.

COMMIT;
```

**Best Practice:** Take a database backup before running:
```bash
# PostgreSQL
pg_dump -U username database_name > backup_before_spinach_kale_$(date +%Y%m%d).sql

# MySQL
mysqldump -u username -p database_name > backup_before_spinach_kale_$(date +%Y%m%d).sql
```

## Impact Analysis

After replacement, check which recipes are affected:

```bash
php artisan tinker --execute="
\$recipes = App\Models\Recipe::whereHas('recipeIngredients', function(\$q) {
    \$q->whereIn('ingredient_id', [315, 606]);
})->pluck('title');

echo 'Recipes now using kale:' . PHP_EOL;
foreach (\$recipes as \$title) {
    echo '  • ' . \$title . PHP_EOL;
}
"
```

## Notes

- **Tortellini spinach** (ID 1029: "or cheese spinach or mushroom tortellini") is NOT replaced as it refers to spinach tortellini, not spinach the vegetable
- **Mixed greens** (ID 948) containing kale among other greens are not modified
- Ingredients that list both "spinach or kale" as alternatives are preserved as-is

---

**Recommendation:** Use the Artisan command (`php artisan ingredient:spinach-to-kale`) for the safest and easiest experience.
