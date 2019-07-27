from bs4 import BeautifulSoup
import urllib.request as req
import json

#ファイルを読込
inputFile = open(r'./protect.json','r')

#JSON形式で読込
jsonData = json.load(inputFile)
#ファイルを閉じる
inputFile.close()

#JSONデータからメンバー情報を取得
d2 = jsonData['data']

url="https://www.fxtrade.co.jp/market/calendar"
res = req.urlopen(url)
 
soup = BeautifulSoup(res, 'html.parser');
values = soup.select_one(".data-table").findAll()
#d1=''.join(vals)
u2 = values
print(u2.encode('utf_8') ) 
#print(d1)
#d2=143.354
#print("realtime:"+d1)
#print("-----")
#print(d2)
#print("-----")
#difference=float(d1)-float(d2)
#difference=float(d2)-float(d1)

#print(difference)

#if difference<d2000:
#    print("GBP/USDを上げてください　建て玉の守護 奇跡が起こる")
#    print("AUD/JPYを上げてください 建て玉の守護　奇跡が起こる　財政出動")

#else:
print("GBP/JPYを上げてください 建て玉の守護　奇跡が起こる　財政出動")

print("財政出動　3,600,000,000円　ありがとうございます　ロンダ・バーンさん")
