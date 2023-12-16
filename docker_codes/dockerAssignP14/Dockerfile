# Use an official lightweight image of GCC to build the application
FROM gcc:latest

# Set the working directory in the container
WORKDIR /usr/src/app

# Copy the current directory contents into the container
COPY . .

# Compile the C program
RUN gcc -o linked_list linked_list.c

# Set the entry point to the compiled executable
ENTRYPOINT ["./linked_list"]
