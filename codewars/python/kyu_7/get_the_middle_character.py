# https://www.codewars.com/kata/get-the-middle-character/


def get_middle(s):
    if len(s) % 2:
        return s[len(s) // 2]
    return s[len(s)//2-1:len(s)//2+1]
