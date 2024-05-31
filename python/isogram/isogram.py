def is_isogram(string):
    string=string.lower()
    string1=string.replace("-","").replace(" ","")
    string2=string1
    a=[]
    for i in range(len(string2)):
        count=0
        for j in range(len(string1)):
            if(string2[i]==string1[j]):
                count=count+1
        a.append(count)

    if sum(a)==len(string1):
        return True
    else:
        return False
        
        
    
            
        
    
    
    pass
