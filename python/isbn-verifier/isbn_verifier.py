def is_valid(isbn):
    # Remove hyphens from the ISBN
    isbn1 = isbn.replace("-", "")
    
    # Ensure the length is exactly 10 after removing hyphens
    if len(isbn1) != 10:
        return False

    # Initialize the sum and count
    total_sum = 0
    count = 10

    # Check if the last character is 'X' or a digit
    for i in range(len(isbn1)):
        if isbn1[i] == 'X' and i == 9:
            total_sum += 10 * count
        elif isbn1[i].isdigit():
            total_sum += int(isbn1[i]) * count
        else:
            return False
        count -= 1
    
    # Check if the total sum is divisible by 11
    return total_sum % 11 == 0

