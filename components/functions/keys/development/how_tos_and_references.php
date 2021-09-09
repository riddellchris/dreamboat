CR 20.08.21
We want to build and/or at the very least utilise a $keys array such that:
	1. common code "blocks" for lack of a better word, are able to be used between the "admin" element of the platform and the client element of the platform:
	2. so that the page can be loaded and unloaded at different sections of the system...
	3. ultimately other than CRITICAL user and client variables, along with basic security variables very few $_SESSION['variables'] remain such that we build a true multi page system
	4. Ultimately most forms and links will pass($keys) and $keys = retrive() where most likely they will be drawn out from $_POST and $GET variables as required and or appropriate