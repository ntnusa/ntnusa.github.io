---
title: 部門介紹
---

## 部門介紹

{% for dep in site.data.deps %}
### {{ dep.dep_name }}

{{ dep.intro }}

<ul class="member">
{% for member in dep.member %}
	<li>
		<img src="{{ member.img }}" alt="{{ member.name }}的照片" width="150">
		{{member.position}} &dash; {{member.subject}} {{member.name}}
	</li>
{% endfor%}
</ul>

<!--
	<a href="{{ item.link }}">
		<img src="/images/icons/{{ item.image }}" alt="{{ item.name }}的 icon" width="50" height="50" >
		{{ item.name }}
	</a>

-->
{% endfor %}
