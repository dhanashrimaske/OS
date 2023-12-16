# Use the official Ubuntu base image
FROM ubuntu:latest

# Update the package lists
RUN apt-get update

# Install OpenJDK
RUN apt-get install -y openjdk-11-jdk

# Set the working directory in the container
WORKDIR /usr/src/app

# Copy the Java application into the container
COPY . .

# Compile and run the Java application
RUN javac Main.java

# Define the command to run the Java application
CMD ["java", "Main"]
