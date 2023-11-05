# Set the base image to use
FROM gcc:latest
# Copy the C program into the container
COPY c_program.c .
# Compile the C program
RUN gcc -o c_program c_program.c
# Set the command to run when the container starts
CMD ["./c_program"]