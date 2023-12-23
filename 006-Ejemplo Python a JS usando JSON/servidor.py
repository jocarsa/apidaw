from flask import Flask
from flask_cors import CORS

app = Flask(__name__)

# Enable CORS for your entire application
CORS(app)

@app.route('/')
def index():
    return '{}'

@app.route('/clientes')
def about_me():
    return '[{"nombre":"Jose Vicente"},{"nombre":"Juan"}]'

@app.route('/productos')
def contact():
    return '[{"nombre":"Zapatillas"},{"nombre":"Camiseta"}]'

if __name__ == '__main__':
    app.run(port=8080)
