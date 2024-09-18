import os
import sqlite3
from fuzzywuzzy import fuzz, process

# Correct image directory path
IMAGE_DIR = "/home/troy/adapnow/public/images/all-images/"
DB_PATH = "/home/troy/adapnow/database/database.sqlite"

# Connect to the SQLite database
conn = sqlite3.connect(DB_PATH)
cursor = conn.cursor()

# Function to find the closest match for a slug in the database
def get_best_match(slug, all_slugs):
    best_match = process.extractOne(slug, all_slugs, scorer=fuzz.ratio)
    if best_match and best_match[1] >= 85:  # Increase matching threshold to 85%
        return best_match[0]
    return None

# Get all slugs from the database
cursor.execute("SELECT slug FROM products")
all_slugs = [row[0] for row in cursor.fetchall()]

# Loop over all image files in the directory
for file_name in os.listdir(IMAGE_DIR):
    if file_name.endswith(".jpg") or file_name.endswith(".png"):  # Check for image files
        # Extract slug and image version from the file name
        slug = file_name.split('-')[0]  # Initial slug part
        image_version = file_name.split('-')[-1].split('.')[0]  # 'main', '2', '3', etc.

        # First match attempt
        best_match_slug = get_best_match(slug, all_slugs)

        if not best_match_slug:
            # Secondary match attempt: try using the full file name without the extension
            slug_alternative = file_name.rsplit('.', 1)[0]
            best_match_slug = get_best_match(slug_alternative, all_slugs)

        if best_match_slug:
            # Decide which column to update based on the image version
            if image_version == "main":
                cursor.execute("UPDATE products SET image = ? WHERE slug = ?", (file_name, best_match_slug))
            elif image_version == "2":
                cursor.execute("UPDATE products SET image_2 = ? WHERE slug = ?", (file_name, best_match_slug))
            elif image_version == "3":
                cursor.execute("UPDATE products SET image_3 = ? WHERE slug = ?", (file_name, best_match_slug))
            elif image_version == "4":
                cursor.execute("UPDATE products SET image_4 = ? WHERE slug = ?", (file_name, best_match_slug))
            elif image_version == "5":
                cursor.execute("UPDATE products SET image_5 = ? WHERE slug = ?", (file_name, best_match_slug))

            # Commit after each update to ensure changes are saved
            conn.commit()
            print(f"Image '{file_name}' successfully updated for product slug: {best_match_slug}")
        else:
            print(f"No matching product found for slug: {slug}")

# Close the database connection
conn.close()

print("Image paths have been successfully updated in the database.")
