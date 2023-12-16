# Use the official python iamge as the base image
FROM python:3.9

# Set the working directory in the container
WORKDIR /app

# Copy the current directory contents into the container at /app
COPY . .
# Make sure 'templates' folder is copied into the container
COPY templates templates

# Install Flask
RUN pip install --no-cache-dir Flask

# Make port 5000 available to the world outside this container 
EXPOSE 5000

# Define envirnoment variable
ENV NAME World 

# Run app.py when the container launches
CMD ["python","app.py"]
