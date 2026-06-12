def input(a, b, c):
    if a == 0 and b == 0 and c == 1:
        q = 1
    elif a == 0 and b == 1 and c == 0:
        q = 1
    elif a == 1 and b == 0 and c == 0:
        q = 1
    elif a == 1 and b == 1 and c == 1:
        q = 1
    else:
        q = 0
    return q
