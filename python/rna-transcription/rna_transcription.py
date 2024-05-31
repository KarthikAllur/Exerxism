def to_rna(dna_strand):
    rna_strand=""
    for item in dna_strand:
        if item=="G":
            #dna_starnd.replace("G","C")
            rna_strand+="C"
        elif item=="C":
            #dna_strand.replace("C","G")
            rna_strand+="G"
        elif item=="T":
            #dna_strand.replace("T","A")
            rna_strand+="A"
        elif item=="A":
            #dna_strand.replace("A","U")
            rna_strand+="U"
    return rna_strand
        
    
    pass
