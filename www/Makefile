FTP_HOST=jonction.moadib.fr
FTP_USER=moadib
FTP_TARGET_DIR=/volume1/web/

SSH_HOST=jonction.moadib.fr
SSH_PORT=4242
SSH_USER=moadib
SSH_TARGET_DIR=/volume1/web/

ssh_upload:
	scp -P $(SSH_PORT) -r * $(SSH_USER)@$(SSH_HOST):$(SSH_TARGET_DIR)

.PHONY: ssh_upload
