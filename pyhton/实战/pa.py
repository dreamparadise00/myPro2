from urllib import request
resp = request.urlopen('https://movie.douban.com/chart')
html_data = resp.read().decode('utf-8')
# print(html_data)
from bs4 import BeautifulSoup as bs
soup = bs(html_data, 'html.parser')
top_movie = soup.find_all('tr', class_='item')
top_movie_name = top_movie[0].find_all('a' , class_='nbg')
top_movie_num = top_movie[0].find_all('div', class_='star clearfix')
print(top_movie_name)
# nowplaying_list = []
# for item in nowplaying_movie_list:
#         nowplaying_dict = {}
#         nowplaying_dict['id'] = item['data-subject']
#         for tag_img_item in item.find_all('img'):
#             nowplaying_dict['name'] = tag_img_item['alt']
#             nowplaying_list.append(nowplaying_dict)
# # print(nowplaying_list)
# requrl = 'https://movie.douban.com/subject/' + nowplaying_list[0]['id'] + '/comments' +'?' +'start=0' + '&limit=20'
# resp = request.urlopen(requrl)
# html_data = resp.read().decode('utf-8')
# soup = bs(html_data, 'html.parser')
# comment_div_lits = soup.find_all('div', class_='comment')
# eachCommentList = []
# for item in comment_div_lits:
#         if item.find_all('p')[0].string is not None:
#             eachCommentList.append(item.find_all('p')[0].string)
# # print(eachCommentList)
# comments = ''
# for k in range(len(eachCommentList)):
#     comments = comments + (str(eachCommentList[k])).strip()
# # print(comments)
# import re
# # 清理数据中的标点符号
# pattern = re.compile(r'[\u4e00-\u9fa5]+')
# filterdata = re.findall(pattern, comments)
# cleaned_comments = ''.join(filterdata)
# print(cleaned_comments)

