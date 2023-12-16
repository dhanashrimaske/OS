# Use an official Nginx runtime as a parent image
FROM nginx:latest

# Copy the current directory contents into the container at /usr/share/nginx/html
COPY . /usr/share/nginx/html

# Expose port 80 to the outside world
EXPOSE 80

# Command to run the executable
CMD ["nginx", "-g", "daemon off;"]
