import json

from bs4 import BeautifulSoup as bs
from selenium import webdriver

from course import Course


def get_all_links(category_links, driver):
    res = []
    for category_link in category_links:
        subpage = 1
        while True:
            driver.get(category_link[:-1] + 'page/' + str(subpage) + '/')
            subpage += 1
            html = driver.page_source
            soup = bs(html, "html.parser")
            container = soup.find('ul', {'class': 'products columns-4'})
            if container is None:
                break
            tmp = container.find_all('li')
            for e in tmp:
                x = e.find('a')
                res.append(x['href'])
    return res


def create_course_obj(link, driver, id):
    driver.get(link)
    html = driver.page_source
    soup = bs(html, "html.parser")
    entry_summary = soup.find('div', {'class': 'summary entry-summary'})
    title = entry_summary.find('h1').text
    if title == "Karta podarunkowa":
        return None
    price = entry_summary.find('bdi').text

    tmp = entry_summary.find('div', {'class': "woocommerce-product-details__short-description"}).find('p')
    if tmp is not None:
        short_desc = tmp.text
    else:
        short_desc = entry_summary.find('div', {'class': "error-span misspelling tooltipstered"}).text

    category = soup.find('span', {'class': "posted_in"}).find('a').text

    img_container = soup.find('ol', {'class': "flex-control-nav flex-control-thumbs"})
    imgs = []
    n_flag = False
    if img_container is None:
        img = soup.find('img', {'class': 'zoomImg'})
        imgs.append(img['src'])
        n_flag = True
    else:
        imgs = img_container.find_all('li')
    sources = []
    for i in imgs:
        if not n_flag:
            x = i.find('img')
            p = x['src']
            ext = p[-4:]
            p = p[:-12]
            p += ext
            sources.append(p)
        else:
            sources.append(i[0])
    description_container = soup.find('div', {'id': "tab-description"})
    text = ""
    if description_container is not None:
        ps = description_container.find_all('p')
        for p in ps:
            content = '<p>' + p.text + '</p>'
            text += (content + '\n')

    # print(text)
    ret = Course(title, short_desc, text, price, sources, link, id)
    ret.set_category(category)
    return ret


PATH = "C:\Program Files (x86)\chromedriver.exe"
# PATH = "/home/user/scrap/scraping/chromedriver"
driver = webdriver.Chrome(PATH)
courses = []

f = open("links.txt", "r")
links = []
for x in f:
    links.append(x)
f.close()

all = get_all_links(links, driver)
# print(all)

# create_course_obj(all[0], driver)
it = 1
for link in all:
    print(it)
    x = create_course_obj(link, driver, it)
    if x is not None:
        courses.append(x)
    it += 1

# print(len(courses))
jsons = []
for c in courses:
    jsons.append(c.make_json())
dumps = json.dumps(jsons)
with open("objects.txt", 'w+') as file:
    file.write(dumps)
    file.close()
driver.close()
