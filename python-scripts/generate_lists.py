import os
import sqlite3

# Define the path to your image directory and the database
IMAGE_DIR = "/home/troy/adapnow/public/images/all-images/"
DB_PATH = "/home/troy/adapnow/database/database.sqlite"

# Create a text file to store the slugs from the database
with open("slugs_list.txt", "w") as slug_file:
    try:
        # Connect to the SQLite database
        conn = sqlite3.connect(DB_PATH)
        cursor = conn.cursor()

        # Fetch all slugs from the database
        cursor.execute("SELECT slug FROM products")
        slugs = cursor.fetchall()

        # Write each slug to the text file
        for slug in slugs:
            slug_file.write(slug[0] + "\n")
        
        print("Slugs have been successfully written to slugs_list.txt.")

    except sqlite3.Error as e:
        print(f"An error occurred while connecting to the database: {e}")
    finally:
        # Close the database connection
        if conn:
            conn.close()

# Create a text file to store the list of images in the directory
with open("images_list.txt", "w") as image_file:
    # Loop through all the image files in the directory
    for file_name in os.listdir(IMAGE_DIR):
        if file_name.endswith(".jpg") or file_name.endswith(".png"):  # Check for image files
            image_file.write(file_name + "\n")

    print("Image filenames have been successfully written to images_list.txt.")
