
require 'rake'
require 'yaml'
require 'time'

SOURCE = "."
CONFIG = {
  'version' => "0.3.0",
  'layouts' => File.join(SOURCE, "_layouts"),
  'posts' => File.join(SOURCE, "_posts"),
  'post_ext' => "html"
}

# 使用方式: rake post title="A Title" [date="2012-02-09"] [tags=[tag1,tag2]] [category="category"]
desc "在 #{CONFIG['posts']} 建立一篇新文章。"
task :post do
  abort("rake 指令中斷: '#{CONFIG['posts']}' 資料夾不存在。") unless FileTest.directory?(CONFIG['posts'])
  title = ENV["title"] || "new-post"
  tags = ENV["tags"] || "[]"
  category = ENV["category"] || ""
  category = "\"#{category.gsub(/-/,' ')}\"" if !category.empty?
  slug = title.downcase.strip.gsub(' ', '-').gsub(/[^\w-]/, '')
  now = Time.now
  begin
    date = (ENV['date'] ? Time.parse(ENV['date']) : Time.now).strftime('%Y-%m-%d')
  rescue => e
    puts "錯誤 - 日期格式必須為 YYYY-MM-DD，請確認你輸入的格式正確無誤！"
    exit -1
  end
  filename = File.join(CONFIG['posts'], "#{date}-#{slug}.#{CONFIG['post_ext']}")
  if File.exist?(filename)
    abort("\nrake 指令中斷!\n\n") if ask("\n#{filename} 已經存在了。你確定要覆蓋它嗎？", ['y', 'n']) == 'n'
  end
  puts ""
  puts "名稱為 #{filename} 的新文章已建立。"
  puts ""
  open(filename, 'w') do |post|
    post.puts "---"
    post.puts "layout: post"
    post.puts "title: \"#{title.gsub(/-/,' ')}\""
    post.puts 'description: ""'
    post.puts "category: #{category}"
    post.puts "date:   " + now.strftime("%Y-%m-%d %H:%M:%S")
    post.puts 'department: '
    post.puts "tags: #{tags}"
    post.puts "---"
  end
end # task :post

# 使用方式: rake page name="about.html"
# 你也可以指定一個包含資料夾路徑的名稱給它，像是 "folder/hihi"
# If you don't specify a file extention we create an index.html at the path specified
desc "建立一個新頁面。"
task :page do
  name = ENV["name"] || "new-page.md"
  filename = File.join(SOURCE, "#{name}")
  filename = File.join(filename, "index.html") if File.extname(filename) == ""
  title = File.basename(filename, File.extname(filename)).gsub(/[\W\_]/, " ").gsub(/\b\w/){$&.upcase}
  if File.exist?(filename)
    abort("\nrake 指令中斷!\n\n") if ask("#{filename} 已經存在了。你確定要覆蓋它嗎？", ['y', 'n']) == 'n'
  end

  mkdir_p File.dirname(filename)
  puts ""
  puts "名稱為 #{filename} 的新頁面已建立。"
  puts ""
  open(filename, 'w') do |post|
    post.puts "---"
    post.puts "layout: page"
    post.puts "title: \"#{title}\""
    post.puts 'description: ""'
    post.puts "---"
  end
end # task :page

desc "在 http://127.0.0.1:4000 預覽。"
task :preview do
  system "jekyll serve -w"
end # task :preview

def ask(message, valid_options)
  if valid_options
    answer = get_stdin("#{message} #{valid_options.to_s.gsub(/"/, '').gsub(/, /,'/')} ") while !valid_options.include?(answer)
  else
    answer = get_stdin(message)
  end
  answer
end

def get_stdin(message)
  print message
  STDIN.gets.chomp
end

#Load custom rake scripts
Dir['_rake/*.rake'].each { |r| load r }
