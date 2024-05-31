def response(hey_bob):
    hey_bob=hey_bob.strip()
    char=list(hey_bob)
    if hey_bob.strip()=="":
        return "Fine. Be that way!"
    elif not (hey_bob.isupper()) and char[-1]=='?' :
        return "Sure."
    elif hey_bob.isupper() and char[-1]!='?':
        return "Whoa, chill out!" 
    elif hey_bob.isupper() and char[-1]=='?':
        return "Calm down, I know what I'm doing!"
    else:
        return "Whatever."
        
        
    
        
    
    pass
