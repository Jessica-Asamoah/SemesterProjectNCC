package com.example.newcreationchurch;

import androidx.appcompat.app.AppCompatActivity;

import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.MediaController;
import android.widget.VideoView;

public class sermonsVideos extends AppCompatActivity {

    Button btnPlay;
    VideoView myVideo;
    MediaController mediaController;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sermons_videos);

        btnPlay = findViewById(R.id.btn_Play);
        myVideo = findViewById(R.id.videoPlayer);

        mediaController = new MediaController(this);

        btnPlay.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String videoPath = "android.resource://com.example.newcreationchurch/"+R.raw.wisdom;
                Uri uri = Uri.parse(videoPath);
                myVideo.setVideoURI(uri);
                myVideo.setMediaController(mediaController);
                mediaController.setAnchorView(myVideo);
                myVideo.start();

            }
        });
    }
}