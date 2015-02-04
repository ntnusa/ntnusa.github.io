# NTNUSA．師大學生會網站
![NTNUSA](image/head.png "NTNUSA")

## 相關資訊

### 簡介

讓校園內資訊流通更為迅速、透明，師大學生能在這裡自在的發表意見，<br />
共同挖掘師大的問題、爭取學生權益，讓每個人的心聲被聽到。<br />
讓師大變成更好的地方。<br />
培養資訊人才，以專業技術為學生服務。<br />

### 網站位置
<a href="http://sa.sa.ntnu.edu.tw">http://sa.sa.ntnu.edu.tw</a>

### 聯絡資訊
<a href="mailto:NTNUSA19th@gmail.com">Email</a>
<a href="https://www.facebook.com/NTNUstudentA">Facebook</a>

## 環境配置

### 簡略步驟

````
1. install ruby
2. install DevKit
3. gem install github-pages
4. gem install jekyll
5. gem install rake
6. jekyll serve
7. Go to http://localhost:4000 or http://127.0.0.1:4000
````


### Windows

+ RubyInstaller : http://tldrify.com/5hf
+ Devkit : http://tldrify.com/5hf
+ Jekyll for windows : http://jekyllrb.com/docs/windows/
+ 基本安裝步驟 : http://cn.yizeng.me/2013/05/10/setup-jekyll-on-windows/

_抱歉要請各位看簡體字，他的內容比較完整，可以參考。但內容有些因為版本更迭的關係而有些不同，請自行隨機應變。_

> #### 注意事項
> + 執行 jekyll serve 前要先下 `chcp 65001` 指令避免編碼錯誤
> + 不要直接新增文字文件，因為 windows 的預設編碼不是 `不以 bom 為開頭的 UTF-8 文件`

<!--### Mac OS X-->

### Linux
> 以 fedora 21 為例

```
sudo dnf install ruby ruby-devel rubygems
sudo gem install github-pages --no-ri --no-rdoc
```

## 一些指令
> 如果有錯誤可能就是環境沒建好，請自行 google 解決問題

+ `rake -T` - 列出簡易命令說明。
+ `rake --help` - 列出完整使用說明。
+ `rake post title="post_name"` - 新增一篇文章 (**常用**) 。
+ `rake page name="page_name"` - 新增一個頁面。
+ `rake preview` - 等同於 jekyll serve, 但結束時會有錯誤訊息，暫無法排除。

**注意** post\_name & page\_name 請不要使用中文，否則會出現很多問題。
但文章內的 title 可以改成中文，總之要保持檔名不是中文。
