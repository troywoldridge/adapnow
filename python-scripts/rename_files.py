import os

def transform_path(original_path):
    # Split the path into directory and filename
    dir_name, file_name = os.path.split(original_path)
    
    # Convert directory path to lowercase and replace backslashes with forward slashes
    dir_name = dir_name.lower().replace('\\', '/')
    
    # Clean up directory path by removing extra spaces
    dir_name = dir_name.strip()
    
    # Transform the filename
    # Convert to lowercase
    file_name = file_name.lower()
    
    # Remove incorrect spacing around dashes
    file_name = file_name.replace(' - ', '-')
    file_name = file_name.replace(' -', '-')
    file_name = file_name.replace('- ', '-')
    file_name = file_name.replace('  ', ' ')  # Replace double spaces with single space
    file_name = file_name.strip()
    
    # Replace any remaining spaces with hyphens
    file_name = file_name.replace(' ', '-')
    
    # Replace underscores with hyphens for consistency
    file_name = file_name.replace('_', '-')
    
    # Return the transformed path
    new_path = os.path.join(dir_name, file_name)
    return new_path

def rename_files():
    # Directory where the files have been moved
    directory_base = '/home/troy/adapnow/public/images/'
    
    # Walk through all files in the directory
    for root, dirs, files in os.walk(directory_base):
        for file_name in files:
            original_path = os.path.join(root, file_name)
            new_path = transform_path(original_path)
            
            # Check if the new path is different from the original
            if original_path != new_path:
                os.rename(original_path, new_path)
                print(f"Renamed: {original_path} -> {new_path}")
            else:
                print(f"No renaming needed: {original_path}")

if __name__ == "__main__":
    rename_files()
