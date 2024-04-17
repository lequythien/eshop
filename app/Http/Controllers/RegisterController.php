protected function validator(array $data){
    return Validator::make($data, [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'username' => 'required|max:16|unique:users',
        'password' => 'required|min:6|confirmed',
    ]);
}

/**
* Create a new user instance after a valid registration.
*
* @param array $data
* @return User
*/
protected function create(array $data){
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'username' => $data['username'],
        'level'=>0,
        'password' => bcrypt($data['password']),
    ]);
}