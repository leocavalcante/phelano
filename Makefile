default:
	vendor/bin/phel build

.PHONY: srv
srv:
	php out/phelano/main.php start
