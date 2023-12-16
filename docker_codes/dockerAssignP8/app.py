from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('login.html')

@app.route('/login', methods=['POST'])
def login():
    username = request.form['username']
    password = request.form['password']
    # Validate the login (in a real application, you'd check against a database, etc.)
    if username == 'your_username' and password == 'your_password':
        return 'Login successful!'
    else:
        return 'Login failed!'

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=7000)
