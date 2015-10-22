
all: deploy_blog deploy_www

deploy_blog:
	make -C blog ssh_upload

deploy_www:
	make -C www ssh_upload

.PHONY: all deploy_blog deploy_www
