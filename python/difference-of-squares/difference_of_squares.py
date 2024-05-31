def square_of_sum(number):
    sum=0
    for i in range(1,number+1):
        sum=sum+i
    return pow(sum,2)
    pass


def sum_of_squares(number):
    sum1=0
    for i in range(1,number+1):
        sum1=sum1+pow(i,2)
    return sum1
    pass


def difference_of_squares(number):
    return square_of_sum(number)-sum_of_squares(number)
    pass
