# Use an official lightweight Nginx image
FROM nginx:alpine

# Remove the default Nginx welcome page
RUN rm -rf /usr/share/nginx/html/*

# Copy the local content to the container's web root
COPY ./my-web-app /usr/share/nginx/html

# Expose port 80
EXPOSE 80
