# https://www.codewars.com/kata/jaden-casing-strings/


def toJadenCase(string: str):
    return ' '.join(x.capitalize() for x in string.split(' '))
