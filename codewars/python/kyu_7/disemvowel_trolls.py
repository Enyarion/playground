# https://www.codewars.com/kata/disemvowel-trolls/train/python


def disemvowel(string):
    for char in 'euioaEUIOA':
        string = string.replace(char, '')
    return string
