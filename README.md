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

#### 架設步驟
+ 安裝 [RubyInstaller](http://tldrify.com/5hf)，記得勾中間會出現的三個選項
+ 解壓縮 [Devkit](http://tldrify.com/5hf)，要存在 **C:/DevKit/**
+ 安裝＆解壓後開啟命令提示字元（可以按 win + r，然後輸入 cmd）
+ 輸入 `ruby -v`，確認 ruby 安裝無誤了
+ 輸入 `cd C:/DevKit`，移動到解壓的資料夾
+ 輸入 `ruby dk.rb init`，建立 config.yml
+ 輸入 `notepad config.yml` 來編輯他
+ 如果他有抓到的話，在眾多 # 字號下方應該會出現
```
  ---
  - C:/Ruby21-x64
```
+ 這樣你就不用編輯他；如果沒有，請手動新增（不要忽略那些減號），然後儲存
+ 接著回到命令提示字元，輸入 `ruby dk.rb install`
+ 輸入 `gem -v`，確認 gem 沒問題了
+ 輸入 `gem install jekyll --source http://rubygems.org`，安裝 jekyll，這邊可能要等他跑一下
+ 跑玩之後關閉 cmd，然後重新開啟，輸入 `cd desktop`，移動到桌面
  + 你有裝 git：輸入 `git clone https://github.com/NTNUSA/NTNUSA-site/`
  + 你沒裝 git：先把 cmd 縮到最小，然後載[這個](https://github.com/NTNUSA/NTNUSA-site/archive/master.zip)，把裡面的資料夾拖到桌面，重新命名為`NTNUSA-site`
+ 回到 cmd，輸入 `cd NTNUSA -site`
+ 輸入 `chcp 65001`，然後再輸入 `jekyll serve`
+ 接著你就可以到 http://127.0.0.1:4000 看網站的架設狀況了

#### 工作步驟
+ 輸入 `cd NTNUSA -site`
+ 輸入 `chcp 65001`，然後再輸入 `jekyll serve` ，然後就可以開始改檔案了
+ 你改了什麼，jekyll 都會幫你更新，只要在 http://127.0.0.1:4000 按 F5 就好，不用重新跑指令

> #### 其他
> + Jekyll for windows : http://jekyllrb.com/docs/windows/
> + 安裝步驟參照 : http://cn.yizeng.me/2013/05/10/setup-jekyll-on-windows/
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
