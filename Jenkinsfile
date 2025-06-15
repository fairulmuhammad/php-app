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
                sh 'composer install'
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
