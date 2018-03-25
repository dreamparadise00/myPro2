word = "friends";
find_the_evil_in_your_word = \
    word[0] + word[2:4] + word[-3:-1]     # 不包括4和-1
print(find_the_evil_in_your_word)
