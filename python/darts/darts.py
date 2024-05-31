def score(x, y):
    dist=(x**2 + y**2)**0.5
    if dist>10:
        return 0
    elif dist>5 and dist<=10:
        return 1
    elif dist>1 and dist<=5:
        return 5
    elif dist>=0 and dist<=1:
        return 10
    
    pass
