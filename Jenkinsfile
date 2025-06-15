pipeline {
    agent any
    stages {
        stage('Clone Repo') {
            steps {
                git branch: 'main', url: 'https://github.com/fairulmuhammad/php-app.git'
            }
        }
        stage('Install Dependencies') {
            steps {
                sh '''
                    apt-get update
                    apt-get install -y php8.2-dom php8.2-curl php8.2-mbstring
                    composer install
                '''
            }
        }
        stage('Run Tests') {
            steps {
                sh 'php ./vendor/bin/phpunit'
            }
        }
        stage('Build Docker Image') {
            steps {
                script {
                    docker.build("php-app:latest", ".")
                }
            }
        }
        stage('Deploy') {
            steps {
                sh 'docker run -d -p 80:80 php-app:latest' 
                }
        }
    }
}
