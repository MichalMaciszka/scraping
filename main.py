from selenium import webdriver
from bs4 import BeautifulSoup as bs


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


PATH = "C:\Program Files (x86)\chromedriver.exe"
driver = webdriver.Chrome(PATH)
courses = []

f = open("links.txt", "r")
links = []
for x in f:
    links.append(x)
f.close()

all = get_all_links(links, driver)
print(all)
