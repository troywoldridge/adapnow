import sqlite3
import os

# Path to the SQLite database
db_path = '/home/troy/adapnow/database/database.sqlite'

# Path to the images folder
images_folder = '/home/troy/adapnow/public/images/all-images'

# Connect to the database
print(f"Connecting to database at {db_path}")
if os.path.exists(db_path):
    conn = sqlite3.connect(db_path)
    cursor = conn.cursor()
    print("Database connected successfully")
else:
    print(f"Database file not found at {db_path}")
    exit()

# Fetch all products and log the count and details
try:
    cursor.execute("SELECT id, slug, name FROM products")
    products = cursor.fetchall()
    if not products:
        print("No products found in the database.")
    else:
        print(f"Found {len(products)} products in the database.")
        for product in products:
            print(f"Product ID: {product[0]}, Slug: {product[1]}, Name: {product[2]}")
except sqlite3.Error as e:
    print(f"An error occurred while fetching products: {e}")
finally:
    conn.close()
    print("Database connection closed.")
