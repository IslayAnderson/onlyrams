import xml.etree.cElementTree as x2j
import json
import sys
import time
#import pandas as pd
from bs4 import BeautifulSoup as bs
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.firefox.options import Options
from selenium.webdriver.common.by import By

URL = 'https://www.sellmylivestock.co.uk/sheep'

javascript2 = "var listingData=\'[\';var ramUrl=function(a){return document.getElementsByClassName(\"hit-wrapper\")[a].querySelector(\"a:nth-child(1)\").href};var ramTitle=function(a){return document.getElementsByClassName(\"hit-wrapper\")[a].querySelector(\"a:nth-child(1) > span:nth-child(2) > h4:nth-child(2)\").innerText};var ramAge=function(a){return document.getElementsByClassName(\"hit-age\").innerText};var ramLocation=function(a){return document.getElementsByClassName(\"hit-wrapper\")[a].querySelector(\"a:nth-child(1) > span:nth-child(2) > div:nth-child(4) > span:nth-child(1) > span:nth-child(2)\").innerText};var ramImg=function(a){return document.getElementsByClassName(\"hit-wrapper\")[a].querySelector(\"a:nth-child(1) > span:nth-child(1) > span:nth-child(2) > div:nth-child(1) > img:nth-child(1)\").getAttribute(\"data-src\")};var listing=document.getElementsByClassName(\"hit-wrapper\");for(i=0;i<listing.length;i++){if(listing[i].classList==\"hit-wrapper flex flex-col justify-center\"){continue}if(i==listing.length-1){last=\"]\"}else{last=\",\"}listingData=listingData+\'{\"title\":\"\'+ramTitle(i)+\'\",\"url\":\"\'+ramUrl(i)+\'\",\"img\":\"\'+ramImg(i)+\'\",\"age\":\"\'+ramAge(i)+\'\",\"location\":\"\'+ramLocation(i)+\'\"}\'+last};return listingData"

scrape = []
results = ""
final = ""

options = Options()

options.headless = True

driver = webdriver.Firefox(options=options, executable_path = r'/var/www/vhosts/onlyrams.co.uk/httpdocs/data/geckodriver')

#driver = webdriver.Firefox()
driver.implicitly_wait(2)

driver.get(URL)
driver.find_element(By.XPATH, '/html/body/div/div[1]/div[2]/div/div[2]/div[2]/div[3]/div/div/div/div/select').click()
driver.find_element(By.XPATH, '/html/body/div/div[1]/div[2]/div/div[2]/div[2]/div[3]/div/div/div/div/select/option[5]').click()

scrape.append(driver.execute_script(javascript2))
print("==============================")
print(scrape)
print("==============================")

with open("/var/www/vhosts/onlyrams.co.uk/httpdocs/data/json/rams.json", "w", encoding="utf-8") as file:
        file.write(str(scrape[0]))

driver.quit()
