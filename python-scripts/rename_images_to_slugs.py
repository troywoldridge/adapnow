import os
import sqlite3

# Correct image directory
image_directory = '/home/troy/adapnow/public/images/all-images'
db_path = '/home/troy/adapnow/database/database.sqlite'

# Fetch image list
with open('/home/troy/adapnow/image_list.txt', 'r') as f:
    image_files = [line.strip() for line in f]

# Establish database connection
conn = sqlite3.connect(db_path)
cursor = conn.cursor()

# Fetch slugs from the database
cursor.execute("SELECT slug FROM products")
slugs = cursor.fetchall()
slugs = [slug[0] for slug in slugs]  # Extract slugs from tuples

# Prepare the update query
update_query = "UPDATE products SET image_path = ? WHERE slug = ?"

# Attempt to match slugs with image files
for slug in slugs:
    matched_images = [img for img in image_files if slug in img]
    if matched_images:
        for i, img in enumerate(matched_images, start=1):
            image_path = os.path.join(image_directory, img)
            cursor.execute(update_query, (image_path, slug))
            print(f"Updated {slug} with image {img}")
    else:
        print(f"No matching file found for slug {slug}")

# Commit changes and close connection
conn.commit()
conn.close()

print('Image paths updated in the database.')
