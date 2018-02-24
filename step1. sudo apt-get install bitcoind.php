step1. sudo apt-get install bitcoind 
step2. bitcoind -daemon
step3. stop : bitcoin-cli stop
step4. cd .bitcoin
step5. confif: nano bitcoin.conf
		rpcuser=bitcoincashplus
		rpcpassword=bitcoincashplus1234
		server=1
		daemon=1
		rpcallowip=0.0.0.0/0
		rpcport=7334
		port=7337  save
step6 bitcoind -daemon