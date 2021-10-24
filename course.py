class Course:
    def __init__(self, title, short_description, full_description, price, image, url):
        self.title = title
        self.short_description = short_description
        self.full_description = full_description
        self.price = price
        self.image = image
        self.url = url
        self.category = None

    def set_category(self, category):
        self.category = category

    def make_json(self):
        result = {}
        result['title'] = self.title
        result['short_description'] = self.short_description
        result['full_description'] = self.full_description
        result['price'] = self.price
        result['image'] = self.image
        result['url'] = self.url
        return result
