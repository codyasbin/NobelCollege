# Use the official PHP image from Docker Hub  
FROM php:8.1-cli  

# Install necessary PHP extensions (optional)  
RUN docker-php-ext-install pdo pdo_mysql  

# Set the working directory  
WORKDIR /NobelCollege  

# Copy the PHP files into the container  
COPY . .  

# Start PHP built-in server  
CMD ["php", "-S", "0.0.0.0:10000", "index.php"]
