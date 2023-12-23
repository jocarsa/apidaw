# pip install Flask Flask-HTTPAuth
from flask import Flask, request, jsonify
from flask_httpauth import HTTPBasicAuth

app = Flask(__name__)
auth = HTTPBasicAuth()

# Define a dictionary of valid users and passwords
users = {
    'josevicente': 'carratala',
    'juan': 'lopez'
}

# Verify user credentials
@auth.verify_password
def verify_password(username, password):
    if username in users and users[username] == password:
        return username

# Protected route
@app.route('/api/data', methods=['GET'])
@auth.login_required
def get_data():
    data = [
        {'nombre': 'Juan'},
        {'nombre': 'Jose Vicente'},
        {'nombre': 'Python'}
    ]
    return jsonify(data)

if __name__ == '__main__':
    app.run(debug=True, port=8081)
