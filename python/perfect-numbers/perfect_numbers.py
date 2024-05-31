def classify(number):
    """ A perfect number equals the sum of its positive divisors.

    :param number: int a positive integer
    :return: str the classification of the input integer
    """
    if number <= 0:
        raise ValueError("Classification is only possible for positive integers.")
        #return 'Number must be a positive integer'
    sum=0
    my_list=[]
    for i in range(1,number-1):
        if number%i==0:
            my_list.append(i)

    for i in range(len(my_list)):
        sum = sum + int (my_list[i])

    if sum==number:
        return 'perfect'
    elif sum>number:
        return 'abundant'
    else :
        return 'deficient'
            
            
    pass
