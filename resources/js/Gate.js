export default class Gate {

	constructor(user) {
		this.user = user;
	}

	isAdmin() {
		return this.user.isAdmin === 1;
	}

	isEmployee() {
		return this.user.isAdmin === 0;
	}
}