def append(list1, list2):
    #list1.extend(list2)
    return list1+list2
    pass


def concat(lists):
    a=[]
    for i in lists:
        a.extend(i)

    return a
    pass


def filter(function, list):
    b=[]
    for i in list:
        if function(i):
            b.append(i)
    return b
        
    pass


def length(list):
    return len(list)
    pass


def map(function, list):
    c=[]
    for i in list:
        c.append(function(i))
    return c
    pass


def foldl(function, list, initial):
    for i in list:
        initial=function(initial,i)
    return initial
    pass


def foldr(function, list, initial):
    for i in list[::-1]:
        initial=function(initial,i)
    return initial
    pass


def reverse(list):
    return list[::-1]
    pass
