import csv
import pandas as pd
pd.options.mode.chained_assignment = None  # default='warn'


# with open('objects.csv', encoding='utf-8-sig') as file:
#     reader = csv.DictReader(file)
#     for row in reader:
#         x = row['Image URLs (x, y, z...)']
#         x.replace(', ', ',')
#         row['Image URLs (x, y, z...)'] = x

df = pd.read_csv("objects.csv")
x = df['Image URLs (x, y, z...)']
tmp = []
for i in range(len(x)):
    a = str(x[i].replace(" ", ""))
    tmp.append(a)

for i in range(len(x)):
    x[i] = tmp[i]
df['Image URLs (x, y, z...)'] = x
df.to_csv("test.csv", index=False)
