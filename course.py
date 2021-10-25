class Course:
    def __init__(self, title, short_description, full_description, price, image_list, url, id):
        self.title = title
        self.short_description = short_description
        self.full_description = full_description
        self.price = price
        self.images = image_list.copy()
        self.url = url
        self.category = None
        self.id = id

    def set_category(self, category):
        self.category = category

    def make_json(self):
        result = {}
        result['Name'] = self.title
        result['Summary'] = self.short_description
        result['Description'] = self.full_description
        result['Price tax included'] = self.price
        result['Image URLs (x, y, z...)'] = self.img_sources_to_string()
        # result['url'] = self.url
        result['ID'] = self.id
        result['Category'] = self.category
        result['URL rewritten'] = self.url_rewritten()
        result['Quantity'] = 999
        return result

    def img_sources_to_string(self):
        res = ""
        for x in self.images:
            res += x + ', '
        return res[:-2]

    def url_rewritten(self):
        new = self.title.replace(' ', '-')
        if len(new) > 120:
            new = new[:120]
        return str(self.id) + '-' + new
