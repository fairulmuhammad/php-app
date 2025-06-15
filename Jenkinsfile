pipeline {
    agent any
    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/fairulmuhammad/php-app.git'
            }
        }
        stage('Install Dependencies') {
            steps {
                sh 'composer install'
            }
        }
        stage('Run Unit Tests') {
            steps {
                sh './vendor/bin/phpunit tests'
            }
        }
        stage('Docker Build & Deploy') {
            steps {
                sh 'docker build -t php-app .'
                sh 'docker run -d -p 8081:80 php-app'
            }
        }
    }
}
