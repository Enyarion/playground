# https://www.codewars.com/kata/growth-of-a-population/


def nb_year(p0, percent, aug, p):
    year = 0
    current_population = p0
    while current_population < p:
        current_population += current_population * (percent / 100) + aug
        year += 1
    return year
